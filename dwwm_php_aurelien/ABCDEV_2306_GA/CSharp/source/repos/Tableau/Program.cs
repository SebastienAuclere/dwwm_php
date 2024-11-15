namespace Tableau
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string[] answer = new string[10];
            string saisie;

            for (int i = 0; i < answer.Length; i++)
            {
                answer[i] = Console.ReadLine();
                saisie = int.Parse(answer[i]);
            }
        }
    }
}