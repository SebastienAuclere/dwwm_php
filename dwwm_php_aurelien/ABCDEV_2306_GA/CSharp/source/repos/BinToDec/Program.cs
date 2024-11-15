namespace BinToDec
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int numero;
            int temp = 0;
            string saisie;

            Console.WriteLine("Saisir le nombre en binaire");
            saisie = Console.ReadLine();
            numero = int.Parse(saisie);

            int[] poids = new int[numero];

            for (int i = 0; i < numero; i++)
            {
                temp = (int)Math.Pow(2, i);
            }

            Console.WriteLine(temp);

        }
    }
}