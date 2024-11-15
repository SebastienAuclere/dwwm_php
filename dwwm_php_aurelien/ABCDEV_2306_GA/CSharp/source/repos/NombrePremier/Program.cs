namespace NombrePremier
{
    public class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            string saisie;

            Console.WriteLine("Saisir un nombre");

            saisie = Console.ReadLine();
            nombre = int.Parse(saisie);

            Console.WriteLine("nombre " + nombre + " increment " + Typebbz(nombre));

        }

        public static int Typebbz(int nombre) {

            int k = 0;

            for (int i = 2; i <= 0; i++)
            {

                if (nombre <= 1)
                {
                    k++;
                }
                else
                {
                    if (nombre % i == 0)
                    {
                        k++;

                    }

                }
            }
            return k;
        }
    }
}